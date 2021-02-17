<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Page\Entities\Page;
use Modules\Page\Entities\PageTranslation;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $target =  PageTranslation::where('slug','home-page-testerr')->first();

        $targetPage = Page::with('translations')->find($target->page_id);

        $newPage = $targetPage->replicate();
        $newPage->push();

        $relations = $targetPage->getRelations();
        foreach ($relations as $relation) {
            foreach ($relation as $relationRecord) {
                $newRelationship = $relationRecord->replicate();
                $newRelationship->page_id = $newPage->id;
                $newRelationship->push();
            }
        }
    }

}
