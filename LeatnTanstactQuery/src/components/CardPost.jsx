import { useQuery } from "@tanstack/react-query"
import { fetchPosts } from "../api/api"

const CardPost = () => {

  const {data:postData,isLoading}=useQuery({
    queryKey:["post"],
    queryFn:fetchPosts
  });
  console.log(data,isLoading)
  return (
    <div>
      {isLoading &&<p>Loading....</p>}

{postData.map((post)=>{
  return <div key={post.id}>
    {post.tags.map((tag)=><span>
      {tag}
    </span>)}
  </div>
})}
        <h1> Component one</h1>
      
    </div>
  )
}

export default CardPost
