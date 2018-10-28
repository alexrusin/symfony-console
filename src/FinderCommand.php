<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;

class FinderCommand extends Command
{
	protected function configure() 
	{
		$this->setName('find')
			->setDescription('Speak a message');
	}

	protected function execute(InputInterface $input, OutputInterface $output) 
	{
		$files = Finder::create()
			->in('./test_files')
			->name('*.txt');
		foreach ($files as $file) {
			$output->writeln('<info>' . $file->getRealPath() . '</info>');
		}
		
	}
}