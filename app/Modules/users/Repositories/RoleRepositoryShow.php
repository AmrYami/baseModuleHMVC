<?php

namespace Users\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use App\Interfaces\RepositoryShow;
use App\Repositories\BaseRepositoryShow;
use Spatie\Permission\Models\Role;
/**
 * Class CampaignRepository
 * @package App\Repositories
 * @version December 11, 2019, 2:33 pm UTC
*/

class RoleRepositoryShow extends BaseRepositoryShow implements RepositoryShow, BaseRepositoryInterface
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'guard_name',
        'created_at',
        'updated_at'
    ];

    /**
     * Use Search Criteria from request to find from model
     *
     * @param  Array $request
     * @return Collection
     */

    public function find_by(array $request)
    {
        $this->model->newQuery();
        if ($request)
            $this->model->where($request);
            return $this->model->paginate(25);
    }


    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model(): string
    {
        return Role::class;
    }

}
