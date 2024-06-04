import React from 'react'

const PostItem = () => {
  const{data,isLoading}=useQuery({
    queryKey: ['todos'],
    queryFn:fetchPosts
  })
  
  console.log(data,isLoading)
  return (
    <div>
      <h1>Components</h1>
    </div>
  )
}

export default PostItem
