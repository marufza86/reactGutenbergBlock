import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from "@wordpress/block-editor";

registerBlockType( 'blocks-course/firstblock', {
	edit: function () {
		const blockProps = useBlockProps();
		//console.log(blockProps);
		return <p {...blockProps}>Edit JSX</p>;
	},
	save: function () {
		const blockProps = useBlockProps.save();
		return <p {...blockProps}>Save JSX</p>;
	},
} );
