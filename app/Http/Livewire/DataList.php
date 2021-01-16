<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Exhibitor;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class DataList extends Component
{
    use WithPagination;

    public $search = '';
    public $category = '';
    public $country = '';

    public function render()
    {
        sleep(1);

        $exhibitors = Exhibitor::with('categories')->where('accepted', true)->where('company', 'Like',  '%' . $this->search . '%')->where('country', 'like', '%' . $this->country . '%')->whereHas('categories', function (Builder $query) {
            $query->where('name', 'like', '%' . $this->category . '%');
        })->paginate(10);

        $countries = [];

        $exhibitorCountries = Exhibitor::where('accepted', true)->get();

        foreach ($exhibitorCountries as $exhibitorCountry) {
            if (!in_array($exhibitorCountry->country, $countries)) {
                array_push($countries, $exhibitorCountry->country);
            }
        }

        $categories = Category::orderBy('name')->get();

        return view('livewire.data-list', ['exhibitors' => $exhibitors, 'categories' => $categories, 'countries' => $countries]);
    }
}
