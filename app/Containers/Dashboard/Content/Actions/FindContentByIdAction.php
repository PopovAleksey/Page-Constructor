<?php

namespace App\Containers\Dashboard\Content\Actions;

use App\Containers\Dashboard\Content\Data\Dto\ContentDto;
use App\Containers\Dashboard\Content\Tasks\FindContentByIdTaskInterface;
use App\Ship\Parents\Actions\Action;
use Illuminate\Support\Collection;

class FindContentByIdAction extends Action implements FindContentByIdActionInterface
{
    public function __construct(
        private FindContentByIdTaskInterface $findContentByIdTask
    )
    {
    }

    public function run(int $pageId): Collection
    {
        return $this->findContentByIdTask->run($pageId);
    }
}
