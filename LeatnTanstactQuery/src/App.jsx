
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
  <div>
    <div className='bg- black h-50'></div>
  </div>
 
       
      </div>
      
    </>
  )
}

export default App
