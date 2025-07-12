<?php 

$contacts = [] ;

function addContact (array &$contact ,string $name , string $email , $phone ):void

{
    array_push($contact, ['name' => $name ,'email' => $email ,'phone'=> $phone ] ) ;
} 

function displayContacts(array $contacts):void
{
    if(empty($contacts)){
        echo "Contacts Unavailable. \n";
    }else{
        foreach ($contacts as $contact){
            echo "
                Name : {$contact['name']},
                Email : {$contact['email']},
                Phone : {$contact['phone']}\n,
            ";
        }
    }
}

while (true){
    echo"\nContact Management App : \n";
    echo"1.Add Contact\n 2.View Contact\n 3.Exit\n";
    $choice = (int)readline("Choice an Option : ");

    if($choice === 1){
        $name = readline("Enter your name :");
        $email = readline("Enter your email :");
        $phone = readline("Enter your number :");
        addContact($contacts , $name ,$email ,$phone  ) ;

        echo"$name added to contact\n";
        echo"$email added to contact\n";
        echo"$phone added to contact\n";
    }elseif($choice === 2){
        displayContacts($contacts);
    }elseif($choice === 3){
        echo "Exiting...\n";
        break;
    }else{
        echo "Invalid Choice. Please try again \n";
    }
}