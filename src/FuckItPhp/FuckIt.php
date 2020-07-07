<?php

namespace FuckItPhp;

class FuckIt {

    public static function php($fucked) {
        $fuckedCode = file_get_contents($fucked);

        do {
            try {
                $fuckingStatus = @eval($fuckedCode);

                return (intval($fuckingStatus));
            }
            catch (\Throwable $fuckingException) {
                $fuckingLines = explode(PHP_EOL, $fuckedCode);
                array_splice($fuckingLines, $fuckingException->getLine() - 1, 1);
                $fuckedCode = implode(PHP_EOL, $fuckingLines);
            }
        }
        while (1);
    }

}
