<?php

use London\Run\Context;

// Register hook paths
Context::registerHookPath(__DIR__."/src/hooks");

// Call default hooks
Context::hook("data");