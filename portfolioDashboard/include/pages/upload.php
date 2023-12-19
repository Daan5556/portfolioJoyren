<form action="?page=uploadProject" method="POST">
  <h2>Upload Project</h2>
  <br>
  <label for="title">Title</label>
  <input type="text" name="title" required="required">
  <label for="description">Description</label>
  <textarea name="description" id="" cols="30" rows="10">

  </textarea>

  <label for="languages">Select Languages</label>
  <select name="languages[]" id="languages" multiple>
    <option value="2">HTML</option>
    <option value="3">CSS</option>
    <option value="4">Javascript</option>
    <option value="5">Python</option>
    <option value="6">PHP</option>
    <option value="7">Github</option>
    <option value="8">Wordpress</option>
  </select>
  <input type="submit" class="pointer">
</form>