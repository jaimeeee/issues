<?php

use Illuminate\Database\Seeder;

class EventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_types')->insert([
            ['event' => 'closed', 'name' => 'closed'],
            ['event' => 'reopened', 'name' => 'reopened'],
            ['event' => 'subscribed', 'name' => 'subscribed'],
            ['event' => 'merged', 'name' => 'merged'],
            ['event' => 'referenced', 'name' => 'referenced'],
            ['event' => 'mentioned', 'name' => 'mentioned'],
            ['event' => 'assigned', 'name' => 'assigned'],
            ['event' => 'unassigned', 'name' => 'unassigned'],
            ['event' => 'labeled', 'name' => 'labeled'],
            ['event' => 'unlabeled', 'name' => 'unlabeled'],
            ['event' => 'milestoned', 'name' => 'milestoned'],
            ['event' => 'demilestoned', 'name' => 'demilestoned'],
            ['event' => 'renamed', 'name' => 'renamed'],
            ['event' => 'locked', 'name' => 'locked'],
            ['event' => 'unlocked', 'name' => 'unlocked'],
        ]);
    }
}
