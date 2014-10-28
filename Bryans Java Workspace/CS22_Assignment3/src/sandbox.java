
public class sandbox
{

	public static boolean isPalindrome(String str)
	{
		if(str == null)
			throw new IllegalArgumentException("string is null");
		if(str.length() == 1)
			return true;

		LLStack<Character> myStack = new LLStack<Character>();

		Boolean myTest = false;
		if(str.length() % 2 == 0)
		{
			for(int i = 0; i < str.length()/2; i++)
			{
				Character myChar = str.charAt(i);
				myStack.push(myChar);
			}
			for(int i = str.length()/2; i < str.length(); i++)
			{
				Character myChar = str.charAt(i);
				if(myChar != myStack.pop())
					return false;
			}
		}
		else
		{
			for(int i = 0; i < str.length()/2 - 1; i++)
			{
				Character myChar = str.charAt(i);
				myStack.push(myChar);
			}
			for(int i = str.length()/2; i < str.length(); i++)
			{
				Character myChar = str.charAt(i);
				if(myChar != myStack.pop())
					return false;
			}
		}
		return true;
	}


	public class LLStack<T> implements Stack<T> {
		// Inner class for a node.  We use an inner class so that the LLStack
		// methods can access the instance variables of the nodes.
		private class Node {
			private T item;
			private Node next;

			private Node(T i, Node n) {
				item = i;
				next = n;
			}
		}

		private Node top;           // the node containing the top item

		/**
		 * Constructs an LLStack object for a stack that is initially
		 * empty.
		 */
		public LLStack() {
			top = null;
		}

		/** 
		 * push - adds the specified item to the top of the stack.
		 * Always returns true, because the linked list is never full.
		 */
		public boolean push(T item) {
			// We insert the new node at the front of the linked list.
			// Note that we assign the new node's next field a reference to the
			// current front of the linked list (top).
			Node newNode = new Node(item, top);
			top = newNode;
			return true;
		}

		/** 
		 * pop - removes the item at the top of the stack and returns a
		 * reference to the removed object.  Returns null if the stack is
		 * empty.
		 */
		public T pop() {
			if (isEmpty())
				return null;

			T removed = top.item;
			top = top.next;
			return removed;
		}

		/** 
		 * peek - returns a reference to the item at the top of the stack
		 * without removing it. Returns null is the stack is empty.
		 */
		public T peek() {
			if (isEmpty())
				return null;
			return top.item;
		}

		/** 
		 * isEmpty - returns true if the stack is empty, and false otherwise
		 */
		public boolean isEmpty() {
			return (top == null);
		}

		/**
		 * isFull - always returns false, because the linked list can
		 * grow indefinitely and thus the stack is never full.
		 */
		public boolean isFull() {
			return false;
		}

		/**
		 * toString - converts the stack into a String of the form 
		 * {top, one-below-top, two-below-top, ...}
		 */
		public String toString() {
			String str = "{";

			Node trav = top;
			while (trav != null) {
				str = str + trav.item;
				if (trav.next != null)
					str = str + ", ";
				trav = trav.next;
			}

			str = str + "}";
			return str;
		}
	}

	public static LLList intersect(LLList list1, LLList list2)
	{
		//	LLList inters = new LLList();       
		ListIterator iter1 = list1.iterator();

		while (iter1.hasNext()) 
		{
			Object item1 = iter1.next();

			ListIterator iter2 = list2.iterator();
			while (iter2.hasNext())
			{
				Object item2 = iter2.next();
				if (item1.equals(item2))
				{
					inters.item = item1;
					inters = inters.next;
					break;
				}
			}
		}
		return inters;
	}

	public class ListIterator
	{

		public boolean hasNext() {
			// TODO Auto-generated method stub
			return false;
		}

		public Object next() {
			// TODO Auto-generated method stub
			return null;
		}

	}

	public class  LLList 
	{
		private Object item;
		private LLList next;
		public ListIterator iterator() {
			// TODO Auto-generated method stub
			return null;
		}
	}


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


