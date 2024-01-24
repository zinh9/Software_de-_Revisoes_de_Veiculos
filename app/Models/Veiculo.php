// app/Veiculo.php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = ['proprietario_id', 'marca', 'modelo'];

    public function proprietario()
    {
        return $this->belongsTo(Proprietario::class);
    }

    public function revisoes()
    {
        return $this->hasMany(Revisao::class);
    }
}
