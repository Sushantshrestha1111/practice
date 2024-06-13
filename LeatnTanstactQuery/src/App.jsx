
import './App.css'
import { useQuery } from '@tanstack/react-query'
import {fetchPosts} from './api/api'

import CardPost from './components/CardPost'



function App() {
//  const{data,isLoading}= useQuery({
//     queryKey:["post"],
//     queryFn:fetchPosts,
//   });

//   console.log(data,isLoading)
  
  

  return (
    <>
      <div>
        tanstact query demo
 
  <CardPost/>
       
      </div>
      <div>testing if connectd with git</div>
      
    </>
  )
}

export default App
