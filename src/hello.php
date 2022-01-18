<?php 

/*
 * (c) GUILLEMPARALS <guillempars@gmail.com>
 *
 */

// If you don't to add a custom vendor folder, then use the simple class
// namespace HelloComposer;
namespace GuillemParals\HelloComposer;

class Hello
{
    public function say($toSay = "Nothing given")
    {
        return $toSay;
    }
}

?>