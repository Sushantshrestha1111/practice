// CardPost.js
import React from 'react';
import { useQuery } from '@tanstack/react-query';
import { fetchPosts } from '../api/api';

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

  return (
    <div className='asd'>
      {data.map((post) => (
        <div key={post.id} className='post'>
          <div>{post.title}</div>
          <span>{post.views}</span>
        </div>
      ))}

      <h1>Component one</h1>
    </div>
  );
};

export default CardPost;
