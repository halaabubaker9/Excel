<?php

namespace App\Imports;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class EmployeeImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new Employee([
    //         'lName' => $row['lName'],
    //         'fName' => $row['fName'],
    //         'phoneNum' => $row['phoneNum'],
    //         'salary' => $row['salary'],
    //     ]);
    // }

    public function collection(Collection $rows){
        return $rows;
    }
}
