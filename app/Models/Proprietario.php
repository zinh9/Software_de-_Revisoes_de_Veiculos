// app/Proprietario.php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    protected $fillable = ['nome', 'genero'];

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class);
    }
}
