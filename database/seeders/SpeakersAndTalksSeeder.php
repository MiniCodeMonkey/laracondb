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
        $this->seedLaraconUS();
        $this->seedLaraconEU();
        $this->seedLaraconIN();
    }

    private function seedLaraconUS()
    {
        $edition = Edition::where('name', 'Laracon US')->first();

        $event = $edition->events()->where('year', 2013)->first();
        $this->addTalk($event, ['Taylor Otwell', 'Dayle Rees', 'Shawn McCool'], 'Laracon 2013 Panel Discussion');
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
        $this->addTalk($event, 'Jeremy Mikola', 'Artisan Jeopardy');
        $this->addTalk($event, 'Adam Wathan', 'Chasing "Perfect"');
        $this->addTalk($event, 'Ed Finkler', 'Open Sourcing Mental Illness');
        $this->addTalk($event, 'Gemma Lynn', 'Navigate Your Git Repository');
        $this->addTalk($event, 'Taylor Otwell', 'Keynote');
        $this->addTalk($event, 'Jeffrey Way', 'Things Laravel Made Me Believe');
        $this->addTalk($event, 'Paul M. Jones', 'Same Thing Happens Every Time');
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
        $this->addTalk($event, 'Jason McCreary');
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

    private function seedLaraconEU()
    {
        $edition = Edition::where('name', 'Laracon EU')->first();

        $event = $edition->events()->where('year', 2013)->first();
        $this->addTalk($event, 'Phill Sparks', 'Software Design Patterns in Laravel 4');
        $this->addTalk($event, 'Jeffrey Way', 'Laravel Testing Tips, Techniques and Pitfalls');
        $this->addTalk($event, 'Jordi Boggiano', 'In-Depth with Composer');
        $this->addTalk($event, 'Fabien Potencier', 'Standardization, the Symfony Way');
        $this->addTalk($event, 'Matthew Machuga', 'Objects, Testing and Responsibility');
        $this->addTalk($event, 'Ben Corlett', 'Bridging the Gap');
        $this->addTalk($event, 'Ross Tuck', 'HTTP and Your Angry Dog');
        $this->addTalk($event, 'Taylor Otwell', 'Building Artisan Commands');
        $this->addTalk($event, 'Kapil Verma', 'Engineering Complex Applications with Laravel 4');
        $this->addTalk($event, 'Frank de Jonge', 'The Knowledge of Others');

        $event = $edition->events()->where('year', 2014)->first();
        $this->addTalk($event, 'Matt Stauffer', 'Sharing Laravel');
        $this->addTalk($event, 'Erika Heidi', 'Portable Environments with Vagrant');
        $this->addTalk($event, 'Kirk Bushell', 'Comprehensive Validation with Laravel 4');
        $this->addTalk($event, 'Ben Corlett', 'Discovering ElasticSearch');
        $this->addTalk($event, 'Taylor Otwell', 'The State of Laravel');
        $this->addTalk($event, 'Mathias Verraes', 'Decoupling the Model from the Framework');
        $this->addTalk($event, 'Rafael Dohms', 'PHP Annotations: They exist!');
        $this->addTalk($event, 'Kayla Daniels', 'The Code Manifesto: Empowering our Community');
        $this->addTalk($event, 'Konstantin Kudryashov', 'Design How Your Objects Talk Through Mocking');
        $this->addTalk($event, 'Igor Wiedler', 'Lisp');
        $this->addTalk($event, 'Ross Tuck', 'Things I Believe Now That I\'m Old');


        $event = $edition->events()->where('year', 2015)->first();
        $this->addTalk($event, 'Matt Stauffer', 'Keynote');
        $this->addTalk($event, 'Dries Vints', 'The Laravel Ecosystem');
        $this->addTalk($event, 'Ben Corlett', 'So You Can Code...Now What?');
        $this->addTalk($event, 'Frank de Jonge', 'Frontin\' like a Back-er');
        $this->addTalk($event, 'Adam Wathan', 'Chasing "Perfect"');
        $this->addTalk($event, 'Taylor Otwell', 'The Tao Of Laravel');
        $this->addTalk($event, 'Jessica Rose', 'Impostor Syndrome and Individual Competence');
        $this->addTalk($event, 'Lorna Jane Mitchell', 'Advanced GIT for Developers');
        $this->addTalk($event, 'Esther Kok', 'Whistleblowing 101');
        $this->addTalk($event, 'Konstantin Kudryashov', 'Min-maxing Software Costs');
        $this->addTalk($event, 'Hannes Van De Vreken', 'Package development');
        $this->addTalk($event, 'Jeffrey Way', 'Things Laravel Made Me Believe');

        $event = $edition->events()->where('year', 2016)->first();
        $this->addTalk($event, 'Taylor Otwell', 'Keynote');
        $this->addTalk($event, 'Evan You', 'Modern Frontend with Vue.js');
        $this->addTalk($event, 'Tihomir Opacic', 'The State Of Content Management');
        $this->addTalk($event, 'Gabriela D\'avila', 'Making the most out of MySQL');
        $this->addTalk($event, 'Freek van der Herten', 'Taking care of backups with Laravel');
        $this->addTalk($event, 'Adam Wathan', 'Curing the common loop');
        $this->addTalk($event, 'Jon Acker', 'TDD is dead, long live TDD');
        $this->addTalk($event, 'Mattias Geniar', 'Varnish for PHP developers');
        $this->addTalk($event, 'Geshan Manandhar', 'Embrace chatops, stop installing deployment software');
        $this->addTalk($event, 'Matthias Noback', 'Please Understand Me');
        $this->addTalk($event, 'Hannes Van De Vreken', 'IOC container beyond constructor injection');
        $this->addTalk($event, 'Abed Halawi', 'The lucid architecture for building scalable applications');
        $this->addTalk($event, 'Edward Coleridge Smith', 'How to avoid database migration hell');
        $this->addTalk($event, 'Jeroen vd Gulik', 'How to Effectively grow a Development team');
        $this->addTalk($event, 'Mitchell van Wijngaarden', 'Future is a thing of the past');
        $this->addTalk($event, 'Frank de Jonge', 'One Box Doesn\'t fit all');
        $this->addTalk($event, 'Gemma Cameron', 'Bringing User Stories to Life');
        $this->addTalk($event, 'Lily Dart', 'No Excuse, User Research');
        $this->addTalk($event, 'Caryn Humphreys & Jesse O\'Brien', 'Project Utopia');
        $this->addTalk($event, 'Christophe Willemsen', 'Your own recomendation Engine with Neo4j AND Reco4PHP');
        $this->addTalk($event, 'Franz Liedke', 'Web accessibility for Artisans');

        $event = $edition->events()->where('year', 2017)->first();
        $this->addTalk($event, 'Marcel Pociot', 'From zero to multi-platform Chatbot with BotMan');
        $this->addTalk($event, 'Max Brokman', 'Denormalization With Eloquent: How, Why and When');
        $this->addTalk($event, 'Jachim Coudenys', 'Write history, keep a diary');
        $this->addTalk($event, 'Christoph Rumpel', 'Chat Bots');
        $this->addTalk($event, 'Jeroen van der Gulik', 'Bruce Lee Driven Development');
        $this->addTalk($event, 'Christopher Pitt', 'Transforming PHP');
        $this->addTalk($event, 'Povilas Korop', 'Generate Laravel Code and Make Money');
        $this->addTalk($event, 'Hannes Van De Vreken', 'Code review beyond code style');
        $this->addTalk($event, 'Rizqi Djamaluddin', 'Bad UX is Not an Option: Intuitive Software by being a Better Developer');
        $this->addTalk($event, 'Freek van der Herten', 'A Practical Intro into Snapshot Testing');
        $this->addTalk($event, 'Anna Fohlmeister', 'Concept to Completion: Building a Lumen API handling in Excess of 10M requests per day');
        $this->addTalk($event, 'Christopher Pitt', 'Monads in PHP');
        $this->addTalk($event, 'Bobby Bouwmann', 'Laravel Design Patterns');
        $this->addTalk($event, 'Alfie Carlisle', 'Agile Development in Education');
        $this->addTalk($event, 'Robert Kilian and Pedro Nogueira', 'Laravel on ABOUT YOU: Philosophies of Development at Scale');
        $this->addTalk($event, 'Taylor Otwell', 'State of Laravel');
        $this->addTalk($event, 'Eryn O\'Neil', 'Project Triage: What to Do When Everything Hits the Fan');
        $this->addTalk($event, 'Freek Van der Herten', 'Building a realtime dashboard with Laravel, Vue and Pusher');
        $this->addTalk($event, 'Bobby Bouwmann', 'Laravel Design Patterns');
        $this->addTalk($event, 'Nicolas Grekas', 'Symfony 4 Preview');
        $this->addTalk($event, 'Julien Bourdeau', 'Build an Airbnb-like search with Laravel, Algolia and Vue.js');
        $this->addTalk($event, 'Laura Elizabeth', 'Debugging Design: 5 simple design principles to make your UI "not look terrible".');
        $this->addTalk($event, 'Amo Chohan', '12 tried and tested top tips for better testing');
        $this->addTalk($event, 'Michiel Gerritsen', 'The introduction to Testing I wish I had.');
        $this->addTalk($event, 'Dries Vints', 'Building your API with Apiary & Dredd');
        $this->addTalk($event, 'Luís Cobucci', 'JWT - To authentication & beyond!');
        $this->addTalk($event, 'Aaron Kunert', 'Beyond tedious meetings: A way to build a self-organized team.');
        $this->addTalk($event, 'Paweł Lewtak', 'Improve your developer\'s toolset');
        $this->addTalk($event, 'Femke van Schoonhoven', 'Stop listening to the internet');
        $this->addTalk($event, 'Povilas Korop', 'How to find / manage remote developers');
        $this->addTalk($event, 'Evan You', 'Inside Vue Components');
        $this->addTalk($event, 'Anna Fohlmeister', 'Concept to Completion: Building a Lumen API handling in Excess of 10M requests per day');

        $event = $edition->events()->where('year', 2018)->first();
        $this->addTalk($event, 'Jenny Shen', 'Build bridges, not walls—Design for users across cultures');
        $this->addTalk($event, 'Amanda Folson', 'Zero to API with Lumen');
        $this->addTalk($event, 'Marcel Pociot', 'Alexa, let\'s build a voice powered app');
        $this->addTalk($event, 'Ross Tuck', 'Everybody Poops');
        $this->addTalk($event, 'Brent Roose', 'Visual perception of code');
        $this->addTalk($event, 'Freek van der Herten', 'Intro to laravel event projector');
        $this->addTalk($event, 'Alex Bilbie', 'Twelve-Factor Apps');
        $this->addTalk($event, 'Robert Basic', 'IntroDDDuction');
        $this->addTalk($event, 'Franz Liedke', 'Customizing Laravel');
        $this->addTalk($event, 'Taylor Dondich', 'Migrating a 15 Year Old Enterprise Application to Laravel: Lessons Learned and Opportunities Gained');
        $this->addTalk($event, 'Diede Guipers', 'How you could run a flat organisation');
        $this->addTalk($event, 'Margaret Staples', 'Simplified Continuous Integration with Laravel and Jenkins');
        $this->addTalk($event, 'Robert Douglass', 'DevOps and the Rebirth of Childhood Innocence');
        $this->addTalk($event, 'Christoph Rumpel', 'Content Security Policy 101');
        $this->addTalk($event, 'Freek van der Herten', 'Handling media in a Laravel application');
        $this->addTalk($event, 'David McKay', 'Kickass Laravel Development with Docker');
        $this->addTalk($event, 'Taylor Dondich', 'Nintendo Emulation in javascript + Vuejs');
        $this->addTalk($event, 'Christopher + Erika', '5 [fun] ways to fall in love [again] with code');
        $this->addTalk($event, 'Rizqi Djamaluddin', 'Fundamentally Flawed: Privacy, People and the Age of Data');
        $this->addTalk($event, 'Kai Sassnowski', 'Things every developer absolutely, positively needs to know about database indexing');
        $this->addTalk($event, 'Marten Westphal', 'How we abused PHP and Laravel to do Big Data');
        $this->addTalk($event, 'Simon Bennett', 'Paying your mortgage with SAAS');
        $this->addTalk($event, 'Jason Adriaan + Chris Pitt', 'Code as a service');
        $this->addTalk($event, 'Mattias Geniar', 'Minimum Viable Linux');
        $this->addTalk($event, 'Marcus Bointon', 'Crypto for Everyone');
        $this->addTalk($event, 'Norbert Sendetzky', 'High Performance e-commerce with Aimeos');
        $this->addTalk($event, 'Roy Duineveld', 'Project showcase: Server monitor & DMP');
        $this->addTalk($event, 'Gabriela Ferrara', 'OMG MySQL 8.0 is out! Are we there yet?');
        $this->addTalk($event, 'Bobby Bouwmann', 'Laravel Design Patterns');
        $this->addTalk($event, 'Leo Sjöberg', 'Logs: The insights you always wanted');
        $this->addTalk($event, 'Mark Starkey', 'How Not to Break a Simple Idea');
        $this->addTalk($event, 'Krystal Campioni', 'Advanced animations with Vue.js: taking your interface to the next level');
        $this->addTalk($event, 'Abdala Cerqueira', 'Docker: Multi-stage Multi-Environment');
        $this->addTalk($event, 'Katerina Trajchevska', 'SOLID Design Principles');
        $this->addTalk($event, 'Marcel Pociot', 'Extending Laravel Nova');
        $this->addTalk($event, 'Chris Brown', 'Presenting Skills for Programmers');
        $this->addTalk($event, 'Saud', 'Gamification');
        $this->addTalk($event, 'Taylor Otwell', 'State of Laravel');


        $event = $edition->events()->where('year', 2024)->first();
        $this->addTalk($event, 'Jess Archer', 'Laravel Pulse: Behind the Scenes');
        $this->addTalk($event, 'Luke Downing', 'Lessons From the Laravel Framework');
        $this->addTalk($event, 'Kévin Dunglas', 'Running Laravel Apps With FrankenPHP');
        $this->addTalk($event, 'Roman Pronskiy', 'The PHP Foundation');
        $this->addTalk($event, 'Christoph Rumpel', 'Managing 5000+ Tests Efficiently');
        $this->addTalk($event, 'Daniel Coulbourne', 'Flip the Switch Slowly');
        $this->addTalk($event, 'Bobby Bouwmann', 'Surviving Large Applications');
        $this->addTalk($event, 'Rissa Jackson', 'Window Magic, Command Line Wizardry');
        $this->addTalk($event, 'Tobias Petry', 'Scaling Databases');
        $this->addTalk($event, 'Freek Van der Herten', 'Uncharted Packages');
        $this->addTalk($event, 'Taylor Otwell', 'Laravel Update');
    }

    private function seedLaraconIN()
    {
        $edition = Edition::where('name', 'Laracon IN')->first();

        $event = $edition->events()->where('year', 2023)->first();
        $this->addTalk($event, 'Freek Van der Herten', 'Fantastic Functions and where to find them');
        $this->addTalk($event, 'Jess Archer', 'Building a Service Container From Scratch');
        $this->addTalk($event, 'Marcel Pociot', 'Give your Laravel app some AI');
        $this->addTalk($event, 'James Brooks', 'Documenting Laravel APIs');
        $this->addTalk($event, 'Gaurav Makhecha', 'Journey of a typical Laravel request');
        $this->addTalk($event, 'Caneco', 'The Hitchhiker\'s Guide to the Laravel Community');
        $this->addTalk($event, 'Drishti Jain', 'Blockchain breakthrough with PHP');
        $this->addTalk($event, 'Mohammad Emran', 'Building a Report Engine for Laravel');
        $this->addTalk($event, 'Joe Dixon', 'Servers? Where We\'re Going, We Don\'t Need Servers!');
        $this->addTalk($event, 'Nuno Maduro', 'The future of PEST');
        $this->addTalk($event, 'Christoph Rumpel', 'Getting Started with TDD');
        $this->addTalk($event, 'Kunal Varma', 'Pluggable Architecture');
        $this->addTalk($event, 'Shruti Balasa', 'Flex with Tailwind CSS');
        $this->addTalk($event, 'Bobby Bouwmann', 'Batchable Jobs');
        $this->addTalk($event, 'Francisco Madeira', 'Build Beautiful CLI Apps Using Termwind');
        $this->addTalk($event, 'Mitul Golakiya', 'SPA Laravel Apps with Hotwire TurboJS');
        $this->addTalk($event, 'Taylor Otwell', 'Laravel Updates');

        $event = $edition->events()->where('year', 2024)->first();
        $this->addTalk($event, 'Freek Van der Herten', 'Uncharted Packages');
        $this->addTalk($event, 'Daniel Coulbourne', 'Flip the switch slowly');
        $this->addTalk($event, 'Guus Leeuw', 'Growing your Laravel Application Infrastructure');
        $this->addTalk($event, 'Jason McCreary', 'Rapid Laravel Development with Blueprint');
        $this->addTalk($event, 'Joe Dixon', 'Real-Time Laravel');
        $this->addTalk($event, 'Shruti Balasa', 'New ways of responsive design in Tailwind CSS');
        $this->addTalk($event, 'Joe Tannenbaum', 'Talkin’ TUIs: Building UIs in the Terminal with Laravel Prompts');
        $this->addTalk($event, 'Karuna Purohit', 'The Yogic Theory of Training Your Subconscious Mind');
        $this->addTalk($event, 'Vatsal Shah', 'RED Framework: Cultivating Winners\' Mindset');
        $this->addTalk($event, 'James Seconde', 'You\'re not Jesse James');
        $this->addTalk($event, 'Ruchit Patel', 'Think Like an Architect, Build with Laravel');
        $this->addTalk($event, 'Jess Archer', 'Laravel Pulse: Behind the Scenes');
        $this->addTalk($event, 'Rissa Jackson', 'Window Magic, Command Line Wizardry');
        $this->addTalk($event, 'Jason McCreary', 'Refactoring Workshop');
        $this->addTalk($event, 'Marcel Pociot', 'Parsing PHP for fun and profit');
        $this->addTalk($event, 'Jilesh Patadiya', 'Unleashing the Power of Serverless Architecture');
        $this->addTalk($event, 'James Brooks', 'Secrets of the Laravel Team');
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
