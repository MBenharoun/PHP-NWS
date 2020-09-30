<?PHP

class Queue
{
    private $myArray;

    public function __construct()
    {
        $this->myArray = array();
        
    }

    public function Enqueue($item)
    {
        array_push($this->myArray, $item);

    }

    public function Dequeue()
    {
        
  if(isset($this->myArray[0]))
        {
            $r = $this->myArray[0];
            array_shift($this->myArray);
            return($r);
        }

        return (null);
    }
}

$queue = new Queue();

$queue -> Enqueue(1);
$queue -> Enqueue(2);
$queue -> Enqueue(3);
$queue -> Enqueue(4);

var_dump($queue->Dequeue());
var_dump($queue->Dequeue());
var_dump($queue->Dequeue());
var_dump($queue->Dequeue());

?>