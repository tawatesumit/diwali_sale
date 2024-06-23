<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:make-service';
    protected $signature = 'make:service {name}';
    
    protected $files;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $path = $this->getPath($name);

        if ($this->files->exists($path)) {
            $this->error('Service already exists!');
            return;
        }

        $this->makeDirectory($path);
        $this->files->put($path, $this->buildClass($name));

        $this->info('Service created successfully.');
    }

    protected function getPath($name)
    {
        return app_path('Services/' . $name . 'Service.php');
    }

    protected function makeDirectory($path)
    {
        if (!$this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0777, true, true);
        }
    }

    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return str_replace('{{ class }}', $name . 'Service', $stub);
    }

    protected function getStub()
    {
        return __DIR__ . '/stubs/service.stub';
    }
}
