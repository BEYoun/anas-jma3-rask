<?php
namespace App\Controller;
use Cake\I18n\Time;
use App\Controller\AppController;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 *
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $clients = $this->paginate($this->Clients);

        $this->set(compact('clients'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('client', $client);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {   
        $client = $this->Clients->newEntity();
        $this->request->data['name']=$this->request->query['name'];
        $this->request->data['users_id']=$this->request->query['users_id'];
        $client = $this->Clients->patchEntity($client, $this->request->getData());
        if ($this->Clients->save($client)) {
            $this->Flash->success(__('The client has been saved.'));
            return $this->redirect(['controller'=>'users','action' => 'login']);
        }
        $this->Flash->error(__('The client could not be saved. Please, try again.'));
        
        $users = $this->Clients->Users->find('list', ['limit' => 200]);
        $this->set(compact('client', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $users = $this->Clients->Users->find('list', ['limit' => 200]);
        $this->set(compact('client', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)) {
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function paiement(){
       
    }
    public function payer(){
        $time = Time::now();
        $id=(int) $this->request->query['id'];
        debug($id);
        $client = $this->Clients->find('all')->where(['users_id ='=>$this->request->query['id']])->first();
        debug($client);
        if($client->end_abonement==null){
            echo 'hi';
        }else{
            echo $client->end_abonement->format('m-d-Y H:i');
            echo $time->addMonth(3)->format('m-d-Y H:i');
        }
        die();
        if($this->request->is(['get'])){
            switch ($this->request->query['mois']) {
                case '1':
                    
                    break;
                case '3':
                   
                    break;
                case '6':
                   
                    break;
                case '12':
                   
                    break;
                default:

                    break;
            }
        }
    }
    public function initialize(){
    parent::initialize();
    $this->Auth->allow(['paiement', 'add','payer']);
    }
}
