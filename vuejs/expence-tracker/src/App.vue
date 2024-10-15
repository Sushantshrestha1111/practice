<template>
 <div>
  <Header></Header>
  <Balance/>
 </div>
 <div class="container">

  <IncomeExpence/>
  <Transaction/>
  <AddTrancation/>
  
 </div>
  
</template>

<script>
import AddTrancation from './components/AddTrancation.vue';
import Balance from './components/Balance.vue';
import Header from './components/Header.vue';
import IncomeExpence from './components/IncomeExpence.vue';
import Transaction from './components/Transaction.vue';


export default {
  name: 'App',
  components: {
    Balance,
    Header,
    IncomeExpence,
    Transaction,
    AddTrancation,
    
  }
}
</script>


