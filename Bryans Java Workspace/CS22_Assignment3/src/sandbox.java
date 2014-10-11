
public class sandbox
{

	public class IntNode 
	{
		private int val;
		private IntNode next;
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


	public static IntNode removeAllOccurrences(IntNode str, char ch)
	{

	}
}


