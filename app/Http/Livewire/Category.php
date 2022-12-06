<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public $category, $category_id;

    protected $listeners = ['deleteConfirmed' => 'deleteCategory'];

    public function render()
    {
        $categories = ModelsCategory::get();

        $data = [
            'categories' => $categories
        ];

        return view('livewire.category.category', $data);
    }

    protected function rules()
    {
        return [
            'category' => 'required|unique:categories'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function store()
    {
        $validatedData = $this->validate();

        ModelsCategory::create($validatedData);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal', ['message' => 'Kategori Berhasil Ditambahkan']);
    }

    public function resetInput()
    {
        $this->category = '';
    }

    public function editCategory($id)
    {
        $category = ModelsCategory::find($id);
        if ($category) {
            $this->category_id = $category->id;
            $this->category = $category->category;
        } else {
            return redirect()->to('admin.category');
        }
    }

    public function update()
    {
        $validatedData = $this->validate();

        ModelsCategory::where('id', $this->category_id)->update([
            'category' => $this->category
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal', ['message' => 'Kategori Berhasil Diubah']);
    }

    public function deleteConfirmation($id)
    {
        $this->category_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteCategory()
    {
        ModelsCategory::where('id', $this->category_id)->delete();
        $this->dispatchBrowserEvent('categoryDeleted');
    }
}
