<?php

// Bad Practice
public function show($id)
{
    $user = getUser($id);
    if ($user) {
        doSomeThing();
        return;
    } else {
        doAnotherThing();
        return;
    }
}

// Good Practice
public function show($id)
{
    $user = getUser($id);
    
    if (!$user) {
        abort(404);
    }

    //Continue execution
}