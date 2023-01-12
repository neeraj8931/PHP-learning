<?php
namespace Src;
// video https://www.youtube.com/watch?v=aCqM9YnjTe0
use DateTime;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Helper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;




class WhatTime extends Command{
    protected function configure()
    {
        $this->setName('gc:whatTime')
            ->setDescription("This command will print the current time")
            ->setHelp("Print the current time to STDOUT");
    }
    public function execute( InputInterface $input, OutputInterface $output){

         $helper= $this->getHelper("question");
         $default="Human";
         $outputQ= new Question("What is your name?? [". $default ."]",$default);

         $name= $helper->ask($input,$output,$outputQ);
         $now = new \DateTime();
         $sql="INSERT INTO `newusers` (`username`, `useremail`, `userpassword`, `userimage`) VALUES (?, ?, ?, '');";
         

         $output->writeln('<info>it is now '.$now->format('g:i a')." , ".$name.'</info>');
         return 0;
    }
}

?>