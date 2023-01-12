<?php
namespace Src;

use Src\DbConnection;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class AddUser extends Command
{
    protected function configure()
    {
        $this->setName('gc:AddUsers')
            ->setDescription('Store user info in database')
            ->setHelp('Use to store user info in database.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $question = new Question('Please enter Username  ');
        $name = $helper->ask($input, $output, $question);
        $question = new Question('Please enter your email-id  ');
        $email = $helper->ask($input, $output, $question);
        $question = new Question('please enter password  ');
        $question->setHidden(true);
        $question->setHiddenFallback(false);
        $password = $helper->ask($input, $output, $question);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $db= new DbConnection();    
        $data = $db ->insertData('consoleusers',"(`name`, `email`,`password`)","('$name', '$email','$hash')" ); 
        $output->writeln('your username '.$name.' and your email-id  '.$email.' is saved successfully');
        return Command::SUCCESS;
    }
}