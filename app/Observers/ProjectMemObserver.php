<?php

namespace App\Observers;

use App\Models\Project;
use App\Models\Volunteer;

class ProjectMemObserver
{
    /**
     * Handle the Volunteer "created" event.
     */
    public function created(Volunteer $volunteer): void
    {
        //
        $project = Project::find($volunteer->project_id);

        if($project)
        {
            $project->increment('people_joined');
        }
    }

    /**
     * Handle the Volunteer "updated" event.
     */
    public function updated(Volunteer $volunteer): void
    {
        //
    }

    /**
     * Handle the Volunteer "deleted" event.
     */
    public function deleted(Volunteer $volunteer): void
    {
        //
        $project = Project::find($volunteer->project_id);

        if($project)
        {
            $project->decrement('people_joined');
        }
    }

    /**
     * Handle the Volunteer "restored" event.
     */
    public function restored(Volunteer $volunteer): void
    {
        //
    }

    /**
     * Handle the Volunteer "force deleted" event.
     */
    public function forceDeleted(Volunteer $volunteer): void
    {
        //
    }
}
