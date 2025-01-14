<?php declare(strict_types=1);

namespace PageBlocks;

return [
    'view_manager' => [
        'template_path_stack' => [
            dirname(__DIR__) . '/view',
        ]
    ],
    'block_layouts' => [
        'factories' => [
            'jumbotron-search' => Service\BlockLayout\JumbotronSearchFactory::class,
            'media-single' => Service\BlockLayout\MediaSingleFactory::class,
            'two-column' => Service\BlockLayout\TwoColumnFactory::class,
            'three-column' => Service\BlockLayout\ThreeColumnFactory::class,
            'topics-list' => Service\BlockLayout\TopicsListFactory::class
        ],
    ],
    'form_elements' => [
        'invokables' => [
            Form\JumbotronSearchForm::class => Form\JumbotronSearchForm::class,
            Form\MediaSingleForm::class => Form\MediaSingleForm::class,
            Form\TwoColumnForm::class => Form\TwoColumnForm::class,
            Form\ThreeColumnForm::class => Form\ThreeColumnForm::class,
            Form\TopicsListForm::class => Form\TopicsListForm::class,
            Form\TopicsListSidebarForm::class => Form\TopicsListSidebarForm::class
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'sidebar' => Service\View\Helper\SidebarViewHelperFactory::class
        ]
    ]
];

?>