<h1>Add new Task</h1>
<form method="post">
    <label>
        Title:
        <input type="text" name="title">
    </label><br/>
    <label>
        Category:
        <select name="cat_id">
            <option></option>
            <option value="1">Anniversary</option>
            <option value="2">Birthday</option>
            <option value="3">Business</option>
        </select>
    </label><br/>
    <label>
        Description:
        <textarea name="description"></textarea>
    </label><br/>
    <label>
        Location:
        <input type="text" name="location">
    </label><br/>
    <label>
        Started On:
        <input type="text" name="start_on">
    </label><br/>
    <label>
        Due Date:
        <input type="text" name="due_date">
    </label><br/><br/>
    <input type="submit" value="Add Task" name="add">
    <a href="index.php">Cancel</a>
</form>