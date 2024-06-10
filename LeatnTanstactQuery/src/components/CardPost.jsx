// CardPost.js
import React from 'react';
import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query';
import { addPost, fetchPosts,fetchTags } from '../api/api';

const CardPost = () => {
  const { data, isLoading, error } = useQuery({
    queryKey: ['posts'],
    queryFn: fetchPosts,
  });

  if (isLoading) {
    return <p>Loading...</p>;
  }

  if (error) {
    return <p>Error: {error.message}</p>;
  }
  console.log(data)
  console.log(data)

  const{data:tagsData}=useQuery({
    queryKey:['tags'],
    queryFn:fetchTags,
    
    
  });
const queryClient=useQueryClient()
  const{mutate,isError}=useMutation({
    mutationFn:addPost,
    onSuccess:(data)=>{
      queryClient.invalidateQueries({
        queryKey:['posts'],
      })
    

    }
  })
  const handleSubmit=(e)=>{
    e.preventDefault();
    const formData=new FormData(e.target);
    const title=formData.get("title");
    const tags=Array.from(formData.keys().filter(key=>formData.get(key)==="on"));
    console.log(title,tags);
    if(!title||!tags)return

    mutate({title,tags});
    e.target.reset()
  }

  return (
    <div className='asd'>

      <form onSubmit={handleSubmit}>
        <input type ="text"
        className='"postbox'
        name="title"
        placeholder='enter name'/>

        <div className="tags">
          {tagsData?.map((tag)=>{
            return(
              <div key={tag}>
                <input type="checkbox" name={tag} value={tag} />
                {tag}
              </div>
            )
          })}
        </div>
        <button>post</button>

      </form>
      {data.map((post) => (
        <div key={post.id} className='post'>
          <div>{post.title}</div>
          <span>{post.tags}</span>
        </div>
      ))}

      <h1>Component one</h1>
    </div>
  );
};

export default CardPost;
