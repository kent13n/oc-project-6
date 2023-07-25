const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, MediaUpload, MediaUploadCheck } =
	wp.blockEditor;
const {
	ColorPicker,
	PanelBody,
	TextControl,
	Button,
	ToggleControl,
	__experimentalNumberControl,
} = wp.components;
const { __ } = wp.i18n;

// check icon here : https://developer.wordpress.org/resource/dashicons/
registerBlockType("planty/product-highlight", {
	title: __("Product Highlight", "planty"),
	icon: "pressthis",
	category: "theme",
	edit({ className, attributes, setAttributes }) {
		const { image } = attributes;
		const html = Render(attributes, setAttributes);

		return <div className={className}>{html}</div>;
	},
	save() {
		return null;
	},
});

function Render(attributes, setAttributes) {
	const { image, enableLaurel } = attributes;
	const imageExist = typeof image !== "undefined" && image !== "";

	const upload = (
		<>
			<MediaUploadCheck>
				<MediaUpload
					type="image"
					onSelect={(image) => {
						let url =
							image.sizes.full.url.replace("http://", "//") ||
							image.sizes.full.url;
						setAttributes({ image: url });
					}}
					render={({ open }) => {
						return (
							<Button
								onClick={open}
								className={
									imageExist
										? "image-button existing"
										: "image-button button"
								}
							>
								{imageExist ? (
									<img src={image} alt="product highlight" />
								) : (
									"Choisir une image"
								)}
							</Button>
						);
					}}
				/>
			</MediaUploadCheck>
			<InspectorControls>
				<PanelBody title="Settings" initialOpen={false}>
					<div className="components-section-background-position">
						<p>Ajuster la position du lauriers gauche</p>
						<div className="components-section-background-position-body">
							<__experimentalNumberControl
								label="X:"
								value={attributes.laurelLeftX}
								onChange={(val) => {
									setAttributes({
										laurelLeftX: parseInt(val) || 0,
									});
								}}
							/>
							<__experimentalNumberControl
								label="Y:"
								value={attributes.laurelLeftY}
								onChange={(val) => {
									setAttributes({
										laurelLeftY: parseInt(val) || 0,
									});
								}}
							/>
						</div>

						<p>Ajuster la position du lauriers droit</p>
						<div className="components-section-background-position-body">
							<__experimentalNumberControl
								label="X:"
								value={attributes.laurelRightX}
								onChange={(val) => {
									setAttributes({
										laurelRightX: parseInt(val) || 0,
									});
								}}
							/>
							<__experimentalNumberControl
								label="Y:"
								value={attributes.laurelRightY}
								onChange={(val) => {
									setAttributes({
										laurelRightY: parseInt(val) || 0,
									});
								}}
							/>
						</div>
					</div>
				</PanelBody>
			</InspectorControls>
		</>
	);

	const laurelLeftStyle = {};
	const laurelRightStyle = {};
	if (attributes.enableLaurel) {
		laurelLeftStyle.left = `calc(50% - ${attributes.laurelLeftX}px)`;
		laurelLeftStyle.top = `${attributes.laurelLeftY}px`;
		laurelRightStyle.left = `calc(50% - ${attributes.laurelRightX}px)`;
		laurelRightStyle.top = `${attributes.laurelRightY}px`;
	}

	const html =
		imageExist && enableLaurel ? (
			<>
				<img
					src="/app/themes/planty/assets/laurel-left.png"
					alt="Laurel left"
					style={laurelLeftStyle}
				/>
				{upload}
				<img
					src="/app/themes/planty/assets/laurel-right.png"
					alt="Laurel right"
					style={laurelRightStyle}
				/>
			</>
		) : (
			<>{upload}</>
		);

	return html;
}
