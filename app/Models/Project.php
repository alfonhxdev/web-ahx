<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Project extends Eloquent implements TranslatableContract
{
    use Translatable;

    protected $connection = 'mongodb';
    protected $collection = 'project';

    protected $primaryKey = 'id';

    public $translatedAttributes = ["name", "type"];
    public $translationModel;
    public $translationForeignKey;

    public $localeKey;


    public function show(Project $project = null)
    {
        $result = null;
        if (!$project) {
            $result = Project::raw(function ($collection) {
                return $collection->aggregate(array(
                    array(
                        '$lookup' => array(
                            'from' => 'project_detail',
                            'localField' => 'project_id',
                            'foreignField' => 'id',
                            'as' => 'details'
                        )
                    )
                ));
            });
        } else {
            $result = Project::raw()->aggregate(array(
                array(
                    '$match' => 'id == ' + $project->id
                ),
                array(
                    '$lookup' => array(
                        'from' => 'project_detail',
                        'localField' => 'project_id',
                        'foreignField' => 'id',
                        'as' => 'details'
                    )
                )
            ));
        }

        return json_decode($result, true);
    }
}
