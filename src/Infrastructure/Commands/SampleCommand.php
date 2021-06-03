<?php

declare(strict_types=1);

namespace App\Infrastructure\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SampleCommand extends Command
{
    protected static $defaultName = 'sample';

    protected function configure(): void
    {
        $this->setDescription('This is a sample command');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello World!');
        return Command::SUCCESS;
    }
}
