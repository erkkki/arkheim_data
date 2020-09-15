<?php
/**
 * Created by PhpStorm.
 * User: erkhe
 * Date: 12.9.2020
 * Time: 0.28
 */


namespace erkhe\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MinifyCommand extends Command
{
    protected static $defaultName = 'app:minify';

    /**
     * @var string
     */
    private $data_folder;

    /**
     * @var string
     */
    private $dist_folder;

    protected function configure()
    {
        $this->setDescription('join & minfiy all json');
    }

    public function __construct($data_folder, $dist_folder)
    {
        $this->data_folder = $data_folder;
        $this->dist_folder = $dist_folder;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $units_elf = json_decode(file_get_contents($this->data_folder . DIRECTORY_SEPARATOR . "units" . DIRECTORY_SEPARATOR . "elf.json"), true);
        $units_dwarf = json_decode(file_get_contents($this->data_folder . DIRECTORY_SEPARATOR . "units" . DIRECTORY_SEPARATOR . "dwarf.json"), true);

        $units = array('elf' => $units_elf, 'dwarf' => $units_dwarf);
        $this->save($units, "units.json");
        $output->writeln("Created units.json to dist folder.");

        $masteries_elf = json_decode(file_get_contents($this->data_folder . DIRECTORY_SEPARATOR . "masteries" . DIRECTORY_SEPARATOR . "elf.json"), true);
        $masteries_dwarf = json_decode(file_get_contents($this->data_folder . DIRECTORY_SEPARATOR . "masteries" . DIRECTORY_SEPARATOR . "dwarf.json"), true);

        $masteries = array('elf' => $masteries_elf, 'dwarf' => $masteries_dwarf);
        $this->save($masteries, "masteries.json");
        $output->writeln("Created masteries.json to dist folder.");

        $warlords_elf = json_decode(file_get_contents($this->data_folder . DIRECTORY_SEPARATOR . "warlords" . DIRECTORY_SEPARATOR . "elf.json"), true);
        $warlords_dwarf = json_decode(file_get_contents($this->data_folder . DIRECTORY_SEPARATOR . "warlords" . DIRECTORY_SEPARATOR . "dwarf.json"), true);

        $warlords = array('elf' => $warlords_elf, 'dwarf' => $warlords_dwarf);
        $this->save($warlords, "warlords.json");
        $output->writeln("Created warlords.json to dist folder.");


        $all_data = array('units' => $units, 'masteries' => $masteries, 'warlords' => $warlords);
        $this->save($all_data, "arkheim.json");
        $output->writeln("Created arkheim.json to dist folder.");

        return Command::SUCCESS;
    }


    private function save($array, $file_name) {
        file_put_contents($this->dist_folder . DIRECTORY_SEPARATOR. "$file_name", json_encode($array));
    }

}
