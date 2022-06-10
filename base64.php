<?php
//* Add Readline Function *//
function readline($prompt = ""):string{
    if($prompt){
        if(is_array($prompt)){
            var_dump($prompt);
        }else {
            echo $prompt."";
        }
    }
    $fp = fopen("php://stdin","r");
    $line = rtrim(fgets($fp, 1024));
    if(empty($line)){
        return '';
    }
    return $line;    
}
// ------------------------------------ \\
#Start!! (～￣▽￣)～
echo("--- > Start!!< ---\n");                                 # Nothing Just Start #

Back:                                                       # Main Warp #
$Input = readline("Enter For Encode > ");                   # Input! #
if ($Input === "") {                                        # If Input = "" #
    echo("Sorry But it Not Working for a only space\n");    # Sorry Text #
    goto Back;                                              # Goto Warp #
}

// --- This is a Encode and Decode --- \\
$encode = base64_encode($Input);                            # Encode #
$decode = base64_decode($encode);                           # Decode #
echo($Input." = Encode > ".$encode."\n");                   # Echo Encode #
echo($encode." = DeCode > ".$decode."\n");                   # Echo Decode #

echo("--- > Done!!< ---\n");                                  # Nothing Just Done #
