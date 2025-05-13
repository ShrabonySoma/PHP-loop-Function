<?php

$name1 = "";
$phone1 = "";
$name2 = "";
$phone2 = "";

while (true) {
    echo "==\n";
    echo "Terminal Contact Manager\n";
    echo "==\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Choose an option (1-3): ";
    $choice = trim(fgets(STDIN));

    if ($choice == "1") {
        if ($name1 != "" && $name2 != "") {
            echo "You have already added 2 contacts. Cannot add more.\n";
        } else {
            echo "Enter contact name: ";
            $inputName = trim(fgets(STDIN));
            echo "Enter phone number: ";
            $inputPhone = trim(fgets(STDIN));

            if ($name1 == "") {
                $name1 = $inputName;
                $phone1 = $inputPhone;
                echo "Contact 1 added successfully\n";
            } elseif ($name2 === "") {
                $name2 = $inputName;
                $phone2 = $inputPhone;
                echo "Contact 2 added successfully\n";
            }
        }
    } 
    elseif ($choice == "2") {
        echo "Saved Contacts\n";
        if ($name1 != "") {
            echo "1. $name1 & $phone1\n";
        }
        if ($name2 != "") {
            echo "2 $name2, $phone2\n";
        }
        if ($name1 == "" & $name2 == "") {
            echo "No contacts saved yet\n";
        }
    } elseif ($choice == "3") {
        echo "Exiting..\n";
        break;
    } else {
        echo "Invalid input. Please enter 1, 2, or 3\n";
    }
}
