<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Imports\ProdutosImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportProdutos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:produtos {fileToPath}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importação de produtos a partir de planilha';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fileToPath = $this->argument('fileToPath');
        Excel::import(new ProdutosImport, $fileToPath);
    }
}
