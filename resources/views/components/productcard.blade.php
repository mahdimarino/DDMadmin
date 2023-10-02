

@props(['product'])

<x-card>

  <tr>
    <th scope="row"><a  href="/product/{{$product['id']}}">{{$product['id']}}</a></th>
    <td>{{$product['title']}}</td>
    <td>{{$product['description']}}</td>
    
  </tr>

</x-card>

