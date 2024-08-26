<?php

namespace Database\Seeders;

use App\Models\Edition;
use App\Models\Event;
use App\Models\Speaker;
use App\Models\Talk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class SpeakersAndTalksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $edition = Edition::where('name', 'Laracon US')->first();

        $event = $edition->events()->where('year', 2013)->first();
        $this->addTalk($event, ['Taylor Otwell', 'Dayle Rees', 'Shawn McCool'], 'Laracon 2013 Panel Discusion');
        $this->addTalk($event, 'Taylor Otwell', 'Eloquence Evolving');
        $this->addTalk($event, 'Shawn McCool', 'When Programmers Start a Business');
        $this->addTalk($event, 'Eric Barnes', 'The Care & Feeding Of A Robot');
        $this->addTalk($event, 'Jonathan Barronville', 'Vagrant, Puppet, Laravel, & You');
        $this->addTalk($event, 'Zack Kitzmiller', 'Procrastinating Code');
        $this->addTalk($event, 'Dayle Rees', 'Laravel: An Unexpected Journey');
        $this->addTalk($event, 'Aaron Kuzemchak', 'Simple API Development With Laravel');
        $this->addTalk($event, 'Phil Sturgeon', 'Laravel & Composer');
        $this->addTalk($event, 'Kenny Meyers', 'Per Your Request, Laravel 4');
        $this->addTalk($event, 'Jeffrey Way', 'Better Testing In Laravel 4');
        $this->addTalk($event, 'Taylor Otwell', 'Eloquence Emerging, Laravel');

        $event = $edition->events()->where('year', 2014)->first();
        $this->addTalk($event, 'Igor Wiedler', 'Abstract Machines');
        $this->addTalk($event, 'John Resig', 'Hacking CS Education @ Khan Academy');
        $this->addTalk($event, 'Dayle Rees', 'Breaking The Mold');
        $this->addTalk($event, 'Greg Baugues', 'Devs & Depression');
        $this->addTalk($event, 'Chris Fidao', 'Hexagonal Architecture');
        $this->addTalk($event, 'Jeremy Mikola', 'Laracon 2014 Lightning Talk');
        $this->addTalk($event, 'Jeremy Mikola', 'Async PHP With React');
        $this->addTalk($event, 'Tim Griesser', 'Demystifying Modern JavaScript');
        $this->addTalk($event, 'Jeffrey Way', 'What\'s Wrong With It?');
        $this->addTalk($event, 'Jeremy Lindblom', 'AWS For Artisans');
        $this->addTalk($event, 'Taylor Otwell', 'Laracon 2014 Keynote');
        $this->addTalk($event, 'Ian Landsman', 'Open Source & Your Business');
        $this->addTalk($event, 'Shawn McCool', 'Laravel.IO, A Use Case Architecture');
        $this->addTalk($event, 'Kayla Daniels', 'Laracon 2014 Lightning Talk');

        $event = $edition->events()->where('year', 2015)->first();
        $this->addTalk($event, 'Matt Stauffer', 'Leveraging Laravel');
        $this->addTalk($event, 'Eryn O\'Neil', 'When It All Hits The Fan');
        $this->addTalk($event, 'Jeremy Mikola', 'Artisan Jeopardy: Round 1');
        $this->addTalk($event, 'Adam Wathan', 'Chasing "Perfect"');
        $this->addTalk($event, 'Ed Finkler', 'Open Sourcing Mental Illness');
        $this->addTalk($event, 'Gemma Lynn', 'Navigate Your Git Repository');
        $this->addTalk($event, 'Taylor Otwell', 'Keynote');
        $this->addTalk($event, 'Jeffrey Way', 'Things Laravel Made Me Believe');
        $this->addTalk($event, 'Paul M. Jones', 'Same Thing Happens Every Time');
        $this->addTalk($event, 'Jeremy Mikola', 'Artisan Jeopardy: Round 2');
        $this->addTalk($event, 'Brian Webb', 'Open Source & Company Culture');
        $this->addTalk($event, 'Samantha Geitz', 'Service Oriented Laravel & Lumen');
        $this->addTalk($event, 'Samantha Quiñones', 'Hacking The Human Interface');
        $this->addTalk($event, 'Yitzchok Willroth', 'Talmudic Maxims To Maximize Your Growth As A Developer');

        $event = $edition->events()->where('year', 2016)->first();
        $this->addTalk($event, 'Adam Wathan', 'Test Driven Laravel');
        $this->addTalk($event, 'Evan You', 'Vue.js Workshop');
        $this->addTalk($event, 'Evan You', 'Vue Router & Vuex');
        $this->addTalk($event, 'Jack McDade', 'Wizards, Lawnmowers, and Hovercrafts');
        $this->addTalk($event, 'Adam Wathan', 'Zollections');
        $this->addTalk($event, 'Fabien Potencier', 'PHP Performance Tuning With Blackfire');
        $this->addTalk($event, 'Chris Fidao', 'Servers For Hackers');
        $this->addTalk($event, 'Taylor Otwell', 'Laravel 5.3 Overview');
        $this->addTalk($event, 'Ben Ramsey', 'Long Live HTTP/2');
        $this->addTalk($event, 'Zeev Suraski', 'PHP 7');
        $this->addTalk($event, 'Amanda Folson', 'APIs With Lumen');
        $this->addTalk($event, 'Matthew Machuga', 'Tests Should Tell A Story');
        $this->addTalk($event, 'Sandi Metz', 'Get A Whiff Of This');
        $this->addTalk($event, 'Chuck Reeves', 'Practical Software Estimation');
        $this->addTalk($event, 'Jason McCreary', 'YAGNI With Laravel');
        $this->addTalk($event, 'Colin DeCarlo', 'Keeping Eloquent Eloquent');
        $this->addTalk($event, 'Jeremy Lindblom', 'Lumen, Guzzle, & Swagger');
        $this->addTalk($event, 'Ryan Singer', 'Design: Case Study');

        $event = $edition->events()->where('year', 2017)->first();
        $this->addTalk($event, 'Freek Van der Herten');
        $this->addTalk($event, 'Tom Schlick');
        $this->addTalk($event, 'Adam Wathan');
        $this->addTalk($event, 'Matt Stauffer');
        $this->addTalk($event, 'Sean Larkinn');
        $this->addTalk($event, ['Mathias Hansen', 'Michele Hansen']);
        $this->addTalk($event, 'Maxime Locqueville');
        $this->addTalk($event, 'Evan You');
        $this->addTalk($event, 'Nils Adermann');
        $this->addTalk($event, 'Taylor Otwell');
        $this->addTalk($event, 'Laura Elizabeth');
        $this->addTalk($event, 'Justin Jackson');
        $this->addTalk($event, 'Jeffrey Way');
        $this->addTalk($event, 'Jack McDade');

        $event = $edition->events()->where('year', 2018)->first();
        $this->addTalk($event, 'Adam Wathan', 'Resisting Complexity');
        $this->addTalk($event, 'Freek Van der Herten', 'Tour of Laravel MediaLibrary v7');
        $this->addTalk($event, 'Jocelyn Glei', 'Hurry Slowly');
        $this->addTalk($event, 'Matt Stauffer', 'Patterns That Pay Off');
        $this->addTalk($event, 'Jason Fried', 'Q&A');
        $this->addTalk($event, 'Samantha Geitz', 'Full-Stack Testing Strategies');
        $this->addTalk($event, 'Jason McCreary', 'Laravel By The Numbers');
        $this->addTalk($event, 'Evan You', 'Vue CLI Overview');
        $this->addTalk($event, 'Taylor Otwell', 'Keynote');
        $this->addTalk($event, 'Ryan Holiday', 'Perennial Seller');
        $this->addTalk($event, 'TJ Miller', 'APIs With Laravel');
        $this->addTalk($event, 'Wes Bos', 'Learn CSS Grid');
        $this->addTalk($event, 'Colin DeCarlo', 'Design Patterns with Laravel');
        $this->addTalk($event, 'Caleb Porzio', 'Embrace The Backend');
        $this->addTalk($event, 'Bob Martin', 'The Clean Coder');

        $event = $edition->events()->where('year', 2019)->first();
        $this->addTalk($event, 'Adam Wathan');
        $this->addTalk($event, 'Freek Van der Herten');
        $this->addTalk($event, 'Bobby Elite Bouwmann');
        $this->addTalk($event, 'JMAC');
        $this->addTalk($event, 'Keith Damiani');
        $this->addTalk($event, 'Kaya Thomas');
        $this->addTalk($event, 'Jonathan Reinink');
        $this->addTalk($event, 'Justin Jackson');
        $this->addTalk($event, 'Taylor Otwell');
        $this->addTalk($event, 'Colin DeCarlo');
        $this->addTalk($event, 'Steve Schoger');
        $this->addTalk($event, 'Evan You');
        $this->addTalk($event, 'Marcel Pociot');
        $this->addTalk($event, 'Caleb Porzio');
        $this->addTalk($event, 'Katerina Trajchevska');
        $this->addTalk($event, 'Christoph Rumpel');
        $this->addTalk($event, 'Dries Vints');
        $this->addTalk($event, 'Matt Stauffer');

        $event = $edition->events()->where('year', 2023)->first();
        $this->addTalk($event, 'Stephen Rees-Carter', 'Th1nk Lik3 a H4cker');
        $this->addTalk($event, 'Aaron Francis', 'Publishing Your Work');
        $this->addTalk($event, 'Diana Scharf', 'Inertia.js');
        $this->addTalk($event, 'Jake Bennett', 'State Machines');
        $this->addTalk($event, 'Freek Van Der Herten', 'Enjoying Laravel Data');
        $this->addTalk($event, 'Matt Stauffer', 'Enterprise Laravel');
        $this->addTalk($event, 'Joel Clermont', 'Getting Unstuck');
        $this->addTalk($event, 'Zuzana Kunckova', 'The Curse of Knowledge');
        $this->addTalk($event, 'Ben Orenstein', 'Predictable Mistakes of the Developer-Turned-Founder');
        $this->addTalk($event, 'Jason McCreary', 'Testing With Fakes');
        $this->addTalk($event, 'Jess Archer', 'Unveiling Laravel Prompts');
        $this->addTalk($event, 'Tim MacDonald', 'Laravel Precognition');
        $this->addTalk($event, 'Marcel Pociot', 'Native PHP');
        $this->addTalk($event, 'Nuno Maduro', 'Pest 2 - Summer of Spice');
        $this->addTalk($event, 'Caleb Porzio', 'Livewire 3');
        $this->addTalk($event, 'Taylor Otwell', 'Laravel Herd, Laravel 11, Laravel Folio, Laravel Volt');

        $event = $edition->events()->where('year', 2024)->first();
        $this->addTalk($event, 'Nuno Maduro', 'Pest');
        $this->addTalk($event, 'Luke Downing', 'Lessons From the Framework');
        $this->addTalk($event, 'Philo Hermans', 'Livewire Beyond the Basics');
        $this->addTalk($event, 'Mateus Guimaraes', 'Behind Laravel Octane');
        $this->addTalk($event, 'Caleb Porzio', 'Livewire Keynote');
        $this->addTalk($event, 'Jack McDade', 'Design for the Rest of Us');
        $this->addTalk($event, 'Seb Armand', 'Scaling Laravel at Square');
        $this->addTalk($event, 'Freek Van der Herten', 'Unique Laravel Packages');
        $this->addTalk($event, 'Rissa Jackson', 'D&D Strategies for Software Excellence');
        $this->addTalk($event, 'Colin DeCarlo', 'Laravel and AI');
        $this->addTalk($event, 'Daniel Coulbourne', 'Verbs for Laravel');
        $this->addTalk($event, 'Taylor Otwell', 'Laravel Keynote');
        $this->addTalk($event, 'Kapehe Sevilleja', 'Building Your Village');
        $this->addTalk($event, 'Joe Dixon', 'Learn to Fly with Laravel Reverb');
        $this->addTalk($event, 'Jess Archer', 'Analyzing Analytical Databases');
        $this->addTalk($event, 'Joe Tannenbaum', 'Terminal UIs');
        $this->addTalk($event, 'Adam Wathan', 'Designing a Component Library');
        $this->addTalk($event, 'Primeagen', 'Developer Excellence');
    }

    private function addTalk(Event $event, array|string $speakerName, ?string $title = null)
    {
        $speakerNames = is_array($speakerName) ? $speakerName : [$speakerName];
        $speakers = collect($speakerNames)->map(fn($speakerName) => $this->getOrCreateSpeaker($speakerName));

        $talk = $this->getOrCreateTalk($speakers, $title);

        $event->talks()->attach($talk);
    }

    private function getOrCreateSpeaker(string $name)
    {
        $name = trim($name);

        $speaker = Speaker::where('name', $name)->first();
        if ($speaker) {
            return $speaker;
        }

        $metaphone = metaphone($name);
        foreach (Speaker::where('name_metaphone', $metaphone)->get() as $potentialSpeaker) {
            if (levenshtein($potentialSpeaker->name, $name) <= 2) {
                echo 'Corrected ' . $name . ' to ' . $potentialSpeaker->name . PHP_EOL;
                return $potentialSpeaker;
            }
        }

        return Speaker::create([
            'name' => $name,
            'name_metaphone' => $metaphone
        ]);
    }

    private function getOrCreateTalk(Collection $speakers, ?string $title = null)
    {
        $talk = $title ? Talk::where('title', $title)->first() : null;

        // Check if the talk is associated with the given speakers
        if ($talk) {
            $associatedSpeakers = $talk->speakers->pluck('id')->toArray();
            $newSpeakers = $speakers->pluck('id')->toArray();

            // If the talk is not associated with all the given speakers, create a new talk
            if (array_diff($newSpeakers, $associatedSpeakers)) {
                $talk = Talk::create(['title' => $title]);
                $talk->speakers()->attach($newSpeakers);
            }
        } else {
            // Create a new talk and associate it with the speakers
            $talk = Talk::create(['title' => $title]);
            $talk->speakers()->attach($speakers->pluck('id')->toArray());
        }

        return $talk;

    }
}
