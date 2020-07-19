<?php namespace recipe\Recipe\Updates;

use recipe\Recipe\Models\File;
use recipe\Recipe\Models\Recipe;
use Seeder;

class SeedRecipeImages extends Seeder
{
    public function run()
    {
        $recipes = Recipe::get();
        foreach($recipes as $recipe) {
            $imageCode = $recipe->thumb;
            if ($imageCode) {
                $imageCodeParts = explode("/", $imageCode);
                $imageName = $imageCodeParts[count($imageCodeParts) - 1];
                $imagePath = __DIR__ . "/../images/" . $recipe->id . ".jpg";
                // print($imagePath);
                $file = new File();
                $imageModel = $file->fromFile($imagePath);
                $imageModel->save();
                $recipe->img()->add($imageModel);
            }
        }

    }
}