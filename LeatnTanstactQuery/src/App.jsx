
import './App.css'
import { useQuery } from '@tanstack/react-query'
import {fetchPosts} from './api/api'

import CardPost from './components/CardPost'



function App() {

  
  

  return (
    <>
      <div>
        
        tanstact query demo
 
  <CardPost/>
  <CardPost/>
       
      </div>
      
    </>
  )
}

export default App
