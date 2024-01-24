// app/Revisao.php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Revisao extends Model
{
    protected $fillable = ['veiculo_id', 'data', 'descricao'];

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
