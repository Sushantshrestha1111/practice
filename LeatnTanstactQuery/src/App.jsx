
import './App.css'
import { useQuery } from '@tanstack/react-query'
import {fetchPosts} from './api/api'

import CardPost from './components/CardPost'



function App() {

  
  

  return (
    <>
      <div>
        <div><h1> save stack </h1></div>
        <div><h1>save 2</h1></div>
        <h1>save 3</h1>
        tanstact query demo
 
  <CardPost/>
       
      </div>
      
    </>
  )
}

export default App
