<?php

namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SayHi extends Command
{
	
	public function configure()
	{
		$this->setName('sayhi')
			->setDescription('Say hi to the given person')
			->addArgument('name', InputArgument::OPTIONAL, 'Your name.')
			->addOption('greeting',null,InputOption::VALUE_OPTIONAL,'override the default greeting','hi there');
	}

	public function execute(InputInterface $input, OutputInterface $output)
	{
		$message=sprintf('%s, %s',$input->getOption('greeting'),$input->getArgument('name'));
		$output->writeln("<info>{$message}</info>");
	}
}
