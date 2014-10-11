
public class sandbox
{

	public class IntNode 
	{
		private int val;
		private IntNode next;
	}

	public class DoubleNode 
	{
		private int ch;
		private DoubleNode next;
		private DoubleNode prev;
	}

	public void printOddsRecursive(IntNode str)
	{
		if(str == null)
			return;

		System.out.println(str.val);

		printOddsRecursive(str.next.next);  

		return; 
	}

	public void printOddsIterative(IntNode str)
	{
		while(str != null)
		{
			System.out.println(str.val);

			str = str.next.next;
		}

		return;
	}


	public static DoubleNode removeAllOccurrences(DoubleNode str, char ch)
	{
		if (str == null)
			throw new IllegalArgumentException("string is empty");

		DoubleNode tempStr=str; //save the pointer to the whole list and update it if the first (several?) items match ch and get deleted
		
		while(str != null)
		{
			if (str.ch == ch && str.prev == null) //If the first node has the ch we're looking to delete, delete it by:
			{
				str.next.prev = null;  //Take out the next node's "prev" reference to it
				tempStr = str.next;  // Skip it out and make the reference point to the new first item in the list
			}
			else if (str.ch == ch) //If it's not the first node and it has the ch we're looking to delete, delete it by:
			{
				str.prev.next = str.next;
				str.next.prev = str.prev;
				//Notice str still points to str.next also, so str = str.next; should be fine 
			}			
			str = str.next;  			
		}

		return tempStr;  //Return the reference to the first DoubleNode
	}
}


