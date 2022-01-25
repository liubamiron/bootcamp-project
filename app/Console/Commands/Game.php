<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;
use Illuminate\Contracts\Config\Repository as ConfigRepository;

class Game extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private CacheRepository $cacheRepository;


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CacheRepository $cacheRepository, ConfigRepository $configRepository)
    {
        parent::__construct();
        $this->cacheRepository = $cacheRepository;
        $this->configRepository = $configRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */


    public function handle()
    {

        $lastVisit = $this->cacheRepository->get('lastCommandVisit', 'never');
        $diedStats = $this->cacheRepository->get('diedCount', 0);
        $surviveStats = $this->cacheRepository->get('surviveCount', 0);


        $this->info("Command called last time: {$lastVisit}");
        $this->info("Died Statistic: {$diedStats}");
        $this->info("Survive Statistic: {$surviveStats}");

        $this->cacheRepository->set('lastCommandVisit', date(\DateTime::ATOM), 86400);


        $executionCicle = True;
        $count = 1;
        $table = [];
        $answer = 'survive';
        $res = 0;

        while ($executionCicle) {
            $random = $random = random_int(0, 2);
            $res = $this->ask("Pull the triger!");

            if ($random === 1) {
                $answer = 'die';
                $table[] = [$answer, $count];
                $this->table(['answer', 'count'], $table);

                $executionCicle = False;
                $this->info("You died");

                $diedStats++;
                $this->cacheRepository->set('diedCount', $diedStats, 86400);

            } elseif ($count > 6) {
                $executionCicle = False;
                $this->info("You survived");

                $surviveStats++;
                $this->cacheRepository->set('surviveCount', $surviveStats, 86400);

            } else {
                $table[] = [$answer, $count];
                $this->table(['answer', 'count'], $table);

                $count++;
                $this->info("You survived");

            }
        }


    }

}