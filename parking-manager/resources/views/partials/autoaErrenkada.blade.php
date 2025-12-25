  <tr>
      <td>{{ $car->Plaka }}</td>
      <td>{{ $car->Beraz }}</td>
      <td>{{ $car->Modeloa }}</td>
      <td>{{ $car-> Erabiltzailea-> izena }}</td>
      <td>
          <form class="delete-form" action="/autoa/{{ $car->id }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="ezabatu"><i class="fa-solid fa-trash"></i> Delete</button>
          </form>
      </td>
  </tr>