export const fetchPosts=async()=>{
    const response = await fetch(`http://localhost:3000/posts?_sort=-id`);
    const postData=await response.json();
    return postData
}