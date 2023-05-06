<?php

namespace LaraDumps\LaraDumpsCore\Concerns;

trait WithEditors
{
    protected array $editors = [
        [
            'id'                 => 'phpstorm',
            'label'              => 'PhpStorm',
            'defaultEnvironment' => 'phpstorm://open?file={filepath}&line={line}',
        ],
        [
            'id'                 => 'atom',
            'label'              => 'Atom',
            'defaultEnvironment' => 'atom://core/open/file?filename={filepath}&line={line}',
        ],
        [
            'id'                 => 'sublime',
            'label'              => 'Sublime',
            'defaultEnvironment' => 'subl://open?url=file://{filepath}&line={line}',
        ],
        [
            'id'                 => 'vs_code',
            'label'              => 'Vs Code',
            'defaultEnvironment' => 'vscode://file/{filepath}:{line}',
        ],
        [
            'id'                 => 'vs_code_remote',
            'label'              => 'Vs Code Remote',
            'defaultEnvironment' => 'vscode://vscode-remote/',
        ],
        [
            'id'                 => 'custom',
            'label'              => 'Custom',
            'defaultEnvironment' => '',
        ],
    ];
}
